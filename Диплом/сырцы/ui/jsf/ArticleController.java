package ru.its360.incareer.article.ui.jsf;

import com.google.common.base.Strings;
import org.primefaces.event.FileUploadEvent;
import org.primefaces.model.DefaultStreamedContent;
import ru.its360.core.annotation.ItsSessionScope;
import ru.its360.core.domain.model.ImageCropData;
import ru.its360.core.service.api.IItsImageManager;
import ru.its360.core.service.api.IManager;
import ru.its360.core.ui.jsf.AbstractController;
import ru.its360.incareer.article.domain.model.Article;
import ru.its360.incareer.article.service.api.IArticleManager;
import ru.its360.incareer.core.IncareerContext;
import ru.its360.incareer.core.ui.NavigationController;
import ru.its360.incareer.verification.test.Test;
import ru.its360.security.context.ContextHolder;

import javax.faces.context.FacesContext;
import javax.faces.event.PhaseId;
import javax.inject.Inject;
import javax.inject.Named;
import javax.json.Json;
import javax.json.JsonObject;
import javax.json.JsonReader;
import javax.servlet.http.HttpServletRequest;
import java.io.ByteArrayInputStream;
import java.io.StringReader;
import java.util.UUID;

/**
 * Created by igor on 11.11.14.
 */
@Named("article")
@ItsSessionScope
public class ArticleController extends AbstractController<Article> {

    public final static String UPLOAD = "upload";
    public final static String CROP = "crop";

    @Inject
    private IArticleManager articleManager;
    @Inject
    private IItsImageManager imageManager;

    @Override
    protected IManager<Article> getManager() {
        return articleManager;
    }

    private String viewState = UPLOAD;

    public String getViewState() {
        return viewState;
    }

    public void setViewState(String viewState) {
        this.viewState = viewState;
    }

    public void handleArticleIconUpload(FileUploadEvent event) {
        if (event.getFile().getContents().length != 0 && this.getSelectItem() != null) {
            getSelectItem().setImage(event.getFile().getContents());
            getSelectItem().setFullSizeImage(event.getFile().getContents());
        }
    }

    public DefaultStreamedContent getImage() {
        FacesContext context = FacesContext.getCurrentInstance();
        if (context.getCurrentPhaseId() != PhaseId.RENDER_RESPONSE) {
            String uuidString = context.getExternalContext().getRequestParameterMap().get("article_image_uuid");
            // Если есть параметр user_uuid
            if (!(uuidString == null || "null".equals(uuidString) || "".equals(uuidString))) {
                UUID id = UUID.fromString(uuidString);
                if (selectItem != null && selectItem.getImage() != null && id.equals(selectItem.getUuid())) {
                    return new DefaultStreamedContent(
                            new ByteArrayInputStream(selectItem.getImage()), "image/jpeg");
                } else {
                    if (items == null) {
                        updateItems();
                    }
                    for (Article item : items) {
                        if (uuidString.equals(item.getUuid().toString()) && item.getImage() != null && item.getImage().length != 0) {
                            return new DefaultStreamedContent(new ByteArrayInputStream(item.getImage()), "image/jpeg");
                        }
                    }
                }
            }
        }
        return new DefaultStreamedContent(new ByteArrayInputStream(new byte[1]), "image/jpeg");
    }

    public DefaultStreamedContent getFullSizeImage() {
        FacesContext context = FacesContext.getCurrentInstance();
        if (context.getCurrentPhaseId() != PhaseId.RENDER_RESPONSE) {
            String uuidString = context.getExternalContext().getRequestParameterMap().get("article_image_uuid");
            // Если есть параметр user_uuid
            if (!(uuidString == null || "null".equals(uuidString) || "".equals(uuidString))) {
                UUID id = UUID.fromString(uuidString);
                if (selectItem != null && selectItem.getFullSizeImage() != null && id.equals(selectItem.getUuid())) {
                    return new DefaultStreamedContent(
                            new ByteArrayInputStream(selectItem.getFullSizeImage()), "image/jpeg");
                } else {
                    if (items == null) {
                        updateItems();
                    }
                    for (Article item : items) {
                        if (uuidString.equals(item.getUuid().toString()) && item.getFullSizeImage() != null && item.getFullSizeImage().length != 0) {
                            return new DefaultStreamedContent(new ByteArrayInputStream(item.getFullSizeImage()), "image/jpeg");
                        }
                    }
                }
            }
        }
        return new DefaultStreamedContent(new ByteArrayInputStream(new byte[1]), "image/jpeg");
    }

    public void crop() {
        String value = FacesContext.getCurrentInstance().getExternalContext().getRequestParameterMap().get("crop_data_input_hidden");
        if (!Strings.isNullOrEmpty(value)) {
            JsonReader reader = Json.createReader(new StringReader(value));
            JsonObject data = (JsonObject) reader.read();
            ImageCropData cropData = new ImageCropData(data.getInt("x"), data.getInt("y"), data.getInt("width"), data.getInt("height"));

            byte[] cropped = imageManager.crop(getSelectItem().getFullSizeImage(), cropData);
            if (cropped.length != 0) {
                getSelectItem().setImage(cropped);
            }
        }
    }

    public boolean isMultiplesToThree(int index) {
        if (index != 0 && index % 3 == 0) {
            return true;
        }
        return false;
    }

    public void next() {
        int currentItemIndex = getItems().indexOf(selectItem);
        if (currentItemIndex == getItems().size() - 1) {
            currentItemIndex = 0;
        } else {
            currentItemIndex++;
        }
        setSelectItem(getItems().get(currentItemIndex));
    }

    public void prev() {
        int currentItemIndex = getItems().indexOf(selectItem);
        if (currentItemIndex == 0) {
            currentItemIndex = getItems().size();
        }
        currentItemIndex--;
        setSelectItem(getItems().get(currentItemIndex));
    }

    public String getArticleLink() {
        UUID uuid = selectItem.getUuid();
        StringBuilder link = new StringBuilder();

        link.append(IncareerContext.getURL())
                .append("/index.xhtml?")
                .append(NavigationController.CONTAINER_PAGE_URL_PARAMETER)
                .append("=content")
                .append("&")
                .append(NavigationController.CONTENT_PAGE_URL_PARAMETER)
                .append("=article&")
                .append("&")
                .append(NavigationController.CONTENT_PAGE_VIEW_STATE_URL_PARAMETER)
                .append("=list&")
                .append(NavigationController.UUID_PARAMETER)
                .append("=")
                .append(uuid);

        return link.toString();
    }

    public void readParametersFromURL() {
        Object request = ContextHolder.getExternalContext().getRequest();
        String uuidString = ((HttpServletRequest) request).getParameter(NavigationController.UUID_PARAMETER);
        if (!Strings.isNullOrEmpty(uuidString)) {
            UUID uuid = UUID.fromString(uuidString);
            Object article = getManager().find(uuid);
            setSelectItem((Article) article);
        }
    }
}
