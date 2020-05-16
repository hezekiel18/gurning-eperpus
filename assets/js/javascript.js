// <script>
          /*                 JavaScript untuk menampilkan modal edit                  */

          
          $(document).ready(function () {            //syntax pembuka fungsi
           $('.editbtn').on('click', function(){     //mendefinisikan event click yang berlaku pada button editbtn 
            $('#editmodal').modal('show');           //ketika diklik akan menampilkan modal 

            $tr = $(this).closest('tr');              //menyimpan tag <tr> yang ada pada v_user ke dalam variabel tr


            // kode untuk mengambil isi text dari tiap tag <td> disimpan dalam variabel data dalam bentuk array
            var data = $tr.children("td").map(function(){   
              return $(this).text();
            }).get();                       
             // akhir kode 

            // kode menampilkan data ke dalam modal berdasarkan atribut id dari tiap tag input
            console.log(data);                
            $('#id').val(data[0]);
            $('#judul').val(data[1]);                  
            $('#penulis').val(data[2]);                  
            $('#kategori').val(data[3]);                  
            $('#stock').val(data[4]);         
            // akhir kode         


          });
         });
          // </script>


          // <script>


          /*                 JavaScript untuk menampilkan alert delete                   */
          function checkDel(){
            return confirm('Anda yakin delete buku ini?');
          }
          // </script>

          
          // <script>
          /*                 JavaScript untuk menampilkan logout                   */
          function display(){
            const btn1 = document.getElementById("user");
            const btn2 = document.getElementById("logout");

            
                btn1.setAttribute('style','');
                btn2.setAttribute('style','');  
                        

          }
         
          // </script>


          // <script>
          /*                 JavaScript untuk menampilkan modal pengembalian                   */
          function pengembalian(){

            var title = "Detail Peminjaman Buku";
            var judulpinjam = $("#btnkembali").data('judul');
            var penulispinjam = $("#btnkembali").data('penulis');
            var kategoripinjam = $("#btnkembali").data('kategori');

            console.log(title);

            $('#judul3').text(judulpinjam);
            $('#penulis3').text(penulispinjam);
            $('#kategori3').text(kategoripinjam);

            var modal = $('#kembalimodal').modal('show');
            modal.find('.modal-title').text(title);
          }
          // </script>


          // <script>


          /*                 JavaScript untuk menampilkan modal peminjaman tabel                  */


          $(document).ready(function () {                      //syntax pembuka fungsi

            var status = $('.btnpinjam').data('status');       //
            if (status=="meminjam") {

              
                $('.btnpinjam').on('click', function(e) {        //mendefinisikan event click yang berlaku pada button btnpinjam 

                  var title = "ANDA BELUM MENGEMBALIKAN BUKU !! Harap kembalikan buku sebelum meminjam buku lain";
                  var judulpinjam = $("#judul").val();
                  var penulispinjam = $("#penulis").val();
                  var kategoripinjam = $("#kategori").val();


                  // kode menampilkan data ke dalam modal berdasarkan atribut id dari tiap tag input
                  console.log(judulpinjam);
                  $('#judul3').text(judulpinjam);
                  $('#penulis3').text(penulispinjam);
                  $('#kategori3').text(kategoripinjam); 
                  // akhir kode 


                  // kode mengganti judul dari modal sesuai dengan variabel title
                  var modal = $('#kembalimodal').modal('show');
                  modal.find('.modal-title').text(title);
                  // akhir kode 

                });              

            }       
            else {

             $('.btnpinjam').on('click', function(){    //mendefinisikan event click yang berlaku pada button btnpinjam 

              $tr = $(this).closest('tr');              //menyimpann tag <tr> yang ada pada v_user ke dalam variabel tr


               // kode untuk mengambil isi text dari tiap tag <td> disimpan dalam variabel data dalam bentuk array
              var data = $tr.children("td").map(function(){
                return $(this).text();
              }).get();                       
               // akhir kode 

            // kode menampilkan data ke dalam modal berdasarkan atribut id dari tiap tag input
              console.log(data[2]);                
              $('#id2').val(data[2]); 
              $('#judul2').val(data[3]);
              $('#penulis2').val(data[4]);
              $('#kategori2').val(data[5]); 
              $('#stok').val(data[6]);                                    
              $('#modalpinjam').modal('show');                
              // akhir kode 


            });       
           }
         });
          // </script>
         


