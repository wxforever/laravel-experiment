### User can create topic(observer)

1、modify the Topic controller to add category for choose and save userid

2、modify Topic model to remove the column should not fillable

3、add topic saving observer to make excerpt and add make_excerpt function to helpers.php

4、modify the topics.create_and_edit view and topics._sidebar and layouts._header