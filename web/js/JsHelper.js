function formatearNumero(n) { 

     return n.split('').reverse().join('').replace(/\d{3}/g, '$&,').split('').reverse().join(''); 

} 


