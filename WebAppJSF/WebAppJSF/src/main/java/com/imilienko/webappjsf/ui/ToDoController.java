/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.imilienko.webappjsf.ui;

import com.imilienko.webappjsf.domain.ToDoItem;
import java.util.List;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;

/**
 *
 * @author igor
 */
@ManagedBean
@SessionScoped
public class ToDoController {
    public List<ToDoItem> getItems(){
        return null;
    }
    
    public ToDoItem addItem(){
        return null;
    }
    
    public ToDoItem removeItem(ToDoItem item){
        return null;
    }
    
}
