package ru.imilienko.dipmon.userstory;

import org.hibernate.annotations.Type;
import org.hibernate.validator.constraints.NotBlank;
import javax.persistence.*;
import javax.validation.constraints.Size;
import javax.xml.bind.annotation.XmlRootElement;
import java.util.UUID;

@Entity
@Cacheable
@Table(name = "stage", schema = "stage")
@XmlRootElement
@CopyDescriptor(filter = DefaultCopyFilters.class)
public class Stage extends UserStoryHolder {

    @Column(name = "tasks")
    private List<UserStoryLink> tasks;
    
    	
	/*...*/
}
