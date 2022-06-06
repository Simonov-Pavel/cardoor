$('#startRent').inputmask('dd.mm.yyyy', { 'placeholder': 'dd.mm.yyyy' });
$('#endRent').inputmask('dd.mm.yyyy', { 'placeholder': 'dd.mm.yyyy' });
$.datepicker.setDefaults( $.datepicker.regional["ru"] );
$( "#startRent" ).datepicker();
$( "#endRent" ).datepicker();

$('#startRent').on('change', function(){
    var start = $('#startRent').val();
    localStorage.setItem('start', start);
});
$('#endRent').on('change', function(){
    var end = $('#endRent').val();
    localStorage.setItem('end', end);
});

$( "#startRent" ).val(localStorage.getItem('start'));
$( "#endRent" ).val(localStorage.getItem('end'));

$('.sort').on('click', function(){
    let sort = $(this).data('sort');
    let slug = $(this).data('slug');
    
    let query = location.href.split('#')[0].split('?');
    let base = query[0];
    let search = query[1];
    let res = "";
    if(search){
        let params = search.split('&');
        for(let i = 0; i < params.length; i++){
            let key = params[i].split('=');
            if(key[0] != sort){
                res += params[i] + '&';
            }
        }
        
    }
    if(slug != ''){
        res += sort + '=' + slug;
    }else{
        res = res.slice(0, -1);
    }

    if(res.length > 0){
        window.location.href = base + '?' + res;
    }else{
        window.location.href = base;
    }
    
    return false;
});