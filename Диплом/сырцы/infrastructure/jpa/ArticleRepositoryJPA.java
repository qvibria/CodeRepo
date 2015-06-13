package ru.its360.incareer.article.infrastructure.jpa;

import org.springframework.stereotype.Repository;
import ru.its360.core.infrastructure.jpa.AbstractEntityRepositoryJPA;
import ru.its360.incareer.article.domain.dao.IArticleRepository;
import ru.its360.incareer.article.domain.model.Article;
import ru.its360.transaction.IEntityManagerWrapper;


/**
 * Created by root on 11.11.14.
 */
@Repository
public class ArticleRepositoryJPA extends AbstractEntityRepositoryJPA<Article> implements IArticleRepository {


    public ArticleRepositoryJPA() {
        super(Article.class);
    }

    @Override
    protected IEntityManagerWrapper getEntityManager() {
        return super.getMainEntityManager();
    }
}
