install laravel composer ที่ไม่ใช่ glbalo
composer create-project laravel/laravel temp-laravel

ใช้ . ไม่ได้เลยใช้วิธีนี้
mv temp-laravel/* temp-laravel/.* . 2>/dev/null
rm -rf temp-laravel


Routing 101
routes/web.app

ทำ about,welcome link ไปกลับได้
ต้องใส่ใน routes/web.php ชี้ ไปหา ใน resources/views/..... 


Layout 101

