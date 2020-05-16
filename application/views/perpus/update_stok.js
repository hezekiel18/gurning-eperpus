const button = document.querySelector('#btnP');

// function readChat() {
//   const urlRead = '<?php echo base_url('buku/pinjam_proses'); ?>';  
//   const chat = document.querySelector('#chat');
//   fetch(urlRead)
//     .then(res => res.text())
//     .then(res => {
//       chat.value = res;
//     });

//   setTimeout(readChat, 1000);
// };
// readChat();


button.addEventListener('click', () => {    
    const url = 'http://localhost/ci/buku/pinjam_proses';
    const id = document.querySelector('#id2').value;    
    fetch(url, {
        method: 'post',        
        body: `id=${id}`
    });
    //document.getElementById('msg').value = ''
});
