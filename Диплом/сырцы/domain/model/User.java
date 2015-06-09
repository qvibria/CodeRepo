package ru.imilienko.dipmon.userstory;

import org.hibernate.annotations.Type;
import org.hibernate.validator.constraints.NotBlank;
import javax.persistence.*;
import javax.validation.constraints.Size;
import javax.xml.bind.annotation.XmlRootElement;
import java.util.UUID;

@Entity
@Cacheable
@Table(name = "report", schema = "report")
@XmlRootElement
@CopyDescriptor(filter = DefaultCopyFilters.class)
public class User extends bstractEntity {

    @Column(name = "firstname")
    private String firstname;
    
     @Column(name = "lastname")
    private String lastname;
    
    
    @Column(name = "patronymic")
    private String patronymic;
    

    @Column(name = "developer")
    private User developer;
    
     @Column(name = "userStory")
    private UserStory userStory;

    @Column(name = "theme")
    private String theme;
	
	/*...*/
}
