### keep track of user last visited time

1、`php artisan make:migration add_last_actived_at_to_users_table` and edit the file,then migrate it.

2、add LastActivedAtHelper.php in Models/Traits folder and add it to user

3、create the RecordLastActivedTime http middleware and add it to web middleware in app/Http/Kernel.php

4、create the SyncUserActiveAt commend to move redis data to databases and add the commend to app/console/Kernel.php

5、modify users.show view 