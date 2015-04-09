
package com.imilienko.webappjsf.domain;

import java.util.Date;

/**
 *
 * @author igor
 */
public class ToDoItem {
    private String title;
    private Date dueDate;

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public Date getDueDate() {
        return dueDate;
    }

    public void setDueDate(Date dueDate) {
        this.dueDate = dueDate;
    }
    
    
}
