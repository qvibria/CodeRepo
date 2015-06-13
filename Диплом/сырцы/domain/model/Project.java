package ru.imilienko.dipmon.userstory;

import org.hibernate.annotations.Type;
import org.hibernate.validator.constraints.NotBlank;
import javax.persistence.*;
import javax.validation.constraints.Size;
import javax.xml.bind.annotation.XmlRootElement;
import java.util.UUID;

@Entity
@Cacheable
@Table(name = "project", schema = "project")
@XmlRootElement
@CopyDescriptor(filter = DefaultCopyFilters.class)
public class Project extends UserStoryHolder {

    @Column(name = "firstname")
    private Sprint currentSprint;
    
    	
	/*...*/
}
