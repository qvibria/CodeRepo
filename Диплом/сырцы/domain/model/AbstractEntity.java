package ru.imilienko.dipmon.userstory;

import org.hibernate.annotations.Type;
import org.hibernate.validator.constraints.NotBlank;
import javax.persistence.*;
import javax.validation.constraints.Size;
import javax.xml.bind.annotation.XmlRootElement;
import java.util.UUID;

@Entity
@XmlRootElement
public class Article {

	 @Id    
    @Column(name = "id")
    private UUID id;

    @Column(name = "title")
    private String title;

    
    @Column(name = "description")
    private String description;

/*...*/
}
