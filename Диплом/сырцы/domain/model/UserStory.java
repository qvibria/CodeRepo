package ru.imilienko.dipmon.userstory;

import org.hibernate.annotations.Type;
import org.hibernate.validator.constraints.NotBlank;
import javax.persistence.*;
import javax.validation.constraints.Size;
import javax.xml.bind.annotation.XmlRootElement;
import java.util.UUID;

@Entity
@Cacheable
@Table(name = "userStory", schema = "userStory")
@XmlRootElement
@CopyDescriptor(filter = DefaultCopyFilters.class)
public class Article extends AbstractEntity {

    @Column(name = "image")
    @Type(type = "binary")
    @Translate(translate = "Картинка")
    private byte[] image;

    @Column(name = "fullSizeImage")
    @Type(type = "binary")
    @Translate(translate = "Полноразмерная картинка")
    private byte[] fullSizeImage;

    @NotBlank(message = "Поле \"Заголовок\" должно быть заполнено и содержать не более 128 символов")
    @Size(max = 128, message = "Поле \"Заголовок\" должно содержать не более 128 символов")
    @Column(name = "title", length = 128, nullable = false)
    @Translate(translate = "Заголовок")
    private String title;

    @Column(name = "content",  columnDefinition = "text")
    @Translate(translate = "Текст")
    private String content;

    @Size(max = 255, message = "Поле \"Заголовок\" должно содержать не более 255 символов")
    @Column(name = "excerpt")
    @Translate(translate = "Цитата")
    private String excerpt;

    public byte[] getFullSizeImage() {
        return fullSizeImage;
    }

    public void setFullSizeImage(byte[] fullSizeImage) {
        this.fullSizeImage = fullSizeImage;
    }

    public void setExcerpt(String excerpt) {
        this.excerpt = excerpt;
    }

    public String getExcerpt(){
        if(excerpt == null ){
            excerpt = "";
        }
        return excerpt;
    }


    public byte[] getImage() {
        return image;
    }

    public String getTitle() {
        return title;
    }

    public String getContent() {
        return content;
    }

    public void setImage(byte[] image) {
        this.image = image;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public void setContent(String content) {
        this.content = content;
    }


    public Article() {
    }

    public Article(UUID uuid) {
        super(uuid);
    }


}
