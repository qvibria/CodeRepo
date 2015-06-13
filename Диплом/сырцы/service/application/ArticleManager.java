package ru.its360.incareer.article.service.application;

import org.springframework.stereotype.Service;
import ru.its360.core.domain.dao.IEntityRepository;
import ru.its360.core.service.application.AbstractManager;
import ru.its360.incareer.article.domain.dao.IArticleRepository;
import ru.its360.incareer.article.domain.model.Article;
import ru.its360.incareer.article.service.api.IArticleManager;
import ru.its360.transaction.annotation.ItsTransaction;

import javax.inject.Inject;
import java.util.UUID;

/**
 * Created by root on 11.11.14.
 */
@Service
@ItsTransaction
public class ArticleManager extends AbstractManager<Article> implements IArticleManager {

    @Inject
    private IArticleRepository articleRepository;

    @Override
    public Article createEmptyEntity() {
        return new Article(UUID.randomUUID());
    }

    @Override
    protected IEntityRepository<Article> getEntityRepository() {
        return articleRepository;
    }

}
