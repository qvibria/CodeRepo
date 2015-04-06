package com.imilienko;

import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.Iterator;
import java.util.List;

import javax.faces.application.FacesMessage;
import javax.faces.context.FacesContext;

import org.primefaces.context.RequestContext;
import org.primefaces.event.SelectEvent;

public class CalendarBean {
	private Date date1;
	
	private List<String> disabledDates;
	
	public List<String> getDisabledDates() {
		if( disabledDates == null){
			disabledDates = new ArrayList<>();
		}
		return disabledDates;
	}

	public void setDisabledDates(
			List<String> disabledDates) {
		this.disabledDates = disabledDates;
	}
	
	public String formatedDisabledDates(){
		StringBuilder builder = new StringBuilder("[");
		Iterator<String> iterator = getDisabledDates().iterator();
		while( iterator.hasNext() )
		{
			builder.append("\"");
			builder.append( iterator.next() );
			builder.append("\"");
			if( iterator.hasNext()){
				builder.append(", ");
			}
		}
		
		builder.append("]");
		return builder.toString();
	}

	public Date getDate1() {
		if (date1 == null) {
			date1 = new Date();
		}
		return date1;
	}

	public void setDate1(Date date1) {
		this.date1 = date1;
	}

	public void onDateSelect(SelectEvent event) {
		FacesContext facesContext = FacesContext.getCurrentInstance();
		SimpleDateFormat format = new SimpleDateFormat("M-d-yyyy");
		getDisabledDates().add( format.format(event.getObject()) );
		facesContext.addMessage(null,
				new FacesMessage(FacesMessage.SEVERITY_INFO, "Date Selected",
						format.format(event.getObject())));
	}

	public void click() {
		RequestContext requestContext = RequestContext.getCurrentInstance();

		requestContext.update("parent");

	}

}
