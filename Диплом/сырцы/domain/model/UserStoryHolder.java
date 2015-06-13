package ru.imilienko.dipmon.userstory;

import org.hibernate.annotations.Type;
import org.hibernate.validator.constraints.NotBlank;
import javax.persistence.*;
import javax.validation.constraints.Size;
import javax.xml.bind.annotation.XmlRootElement;
import java.util.UUID;

@Entity
@Cacheable
@Table(name = "UserStoryHolder", schema = "UserStoryHolder")
@XmlRootElement
@CopyDescriptor(filter = DefaultCopyFilters.class)
public class UserStoryHolder extends AbstractEntity {

    @Column(name = "image")
    private String purpose;

    @Column(name = "backlog")
    private List<UserStoryLink> backlog;
	
	public addUserStory(UserStory userStory){
		/*...*/
	}
	
	public removeUserStory(UserStory userStory){
		/*...*/
	}
}
