## Install Project
 1. git clone https://github.com/sheptianbagjautama/hola-halo-catalog.git atau jika tidak menggunakan git, silakan download zip dan extract pada direktori web server <b>(misal: xampp/htdocs)</b>
 2. setelah itu , buka root projek ini <b>cd hola-hola-catalog</b> di command prompt/terminal lalu ketikan <b>composer install</b>
 3. ketikan <b>cp .env.example .env</b>, Jika tidak menggunakan command prompt, bisa rename langsung file .env.example menjadi .env
 4. setelah itu ketika <b>php artisan key:generate</b>
 5. Buat database pada mysql untuk aplikasi ini
 6. Setting database pada file .env
    - DB_DATABASE=(masukan nama database)
    - DB_USERNAME=(masukan username webserver) 
    - DB_PASSWORD=(masukan password webserver)
  7. ketika di command promp/terminal <b>php artisan migrate --seed</b>
  8. ketikan di command promp/terminal <b>php artisan serve</b>
  9. selesai, aplikasi berhasil dijalankan.
  
  ## Login Admin 
  Data admin sudah dibuat di seeder
  - email       : admin@gmail.com
  - password    : password
  
  ## Beberapa Preview Aplikasi
![e](https://user-images.githubusercontent.com/13019337/54938967-03bed600-4f5a-11e9-8529-033dac3c0579.jpg)
![a](https://user-images.githubusercontent.com/13019337/54938969-04576c80-4f5a-11e9-9e07-c2f869b80958.jpg)
![b](https://user-images.githubusercontent.com/13019337/54938970-04f00300-4f5a-11e9-84b5-c4d52a5218ce.jpg)
![c](https://user-images.githubusercontent.com/13019337/54938972-04f00300-4f5a-11e9-80ea-c3804fbed718.jpg)
![d](https://user-images.githubusercontent.com/13019337/54938974-04f00300-4f5a-11e9-973c-57b9c90bc712.jpg)

  
 
