<form id="searchbox" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" > 
    <input type="text" value="Поиск..." name="search" id="search" onfocus="if (this.value == 'Поиск...')
                this.value = '';" onblur="if (this.value == '')
                            this.value = 'Поиск...';"/> <input id="submit" type="submit" value="Искать">   
</form>