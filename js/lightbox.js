let image = document.querySelectorAll('main aside img');

for(let i=0;i<image.length;i++){
    image[i].addEventListener('click', function(){
        
        let source = this.getAttribute('src');

        let div = document.createElement('div');
        div.setAttribute('id', 'lightbox');

        let monImage = document.createElement('img');
        monImage.setAttribute('src', source);

        div.appendChild(monImage);

        let close = document.createElement('img');
        close.setAttribute('src', 'image/close.gif');
        close.setAttribute('id', 'close');
        div.appendChild(close);

        document.body.appendChild(div);

        close.addEventListener('click', function(){
            document.body.removeChild(div);
        });


    }); 
};
