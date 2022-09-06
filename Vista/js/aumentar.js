$(document).ready(function () {

    $('.aumentar').click(function () {
        var color = document.body.style.backgroundColor; 
        if ( color === 'rgb(255, 209, 0)') { 
            document.body.style.backgroundColor = '#dfdfdf'; 
            document.getElementById('cabecera').style.backgroundColor = 'blue';
            document.querySelectorAll('.nav li a')[0].style.backgroundColor = 'blue';
            document.querySelectorAll('.nav li a')[1].style.backgroundColor = 'blue';
            document.querySelectorAll('.nav li a')[2].style.backgroundColor = 'blue';
            document.querySelectorAll('.nav li a')[3].style.backgroundColor = 'blue';
            document.getElementById('pie').style.backgroundColor = '#0000ff';
            document.querySelector('#pie p a').style.backgroundColor = 'blue';
            document.querySelector('#pie p a').style.border = '1px solid blue';
        } else { 
            document.body.style.backgroundColor = '#ffd100';
            document.getElementById('cabecera').style.backgroundColor = '#1d244a';
            document.querySelectorAll('.nav li a')[0].style.backgroundColor = '#1d244a';
            document.querySelectorAll('.nav li a')[1].style.backgroundColor = '#1d244a';
            document.querySelectorAll('.nav li a')[2].style.backgroundColor = '#1d244a';
            document.querySelectorAll('.nav li a')[3].style.backgroundColor = '#1d244a';
            document.getElementById('pie').style.backgroundColor = '#1d244a'; 
            document.querySelector('#pie p a').style.backgroundColor = '#1d244a';
            document.querySelector('#pie p a').style.border = '1px solid #1d244a';
        }
        
    });

});