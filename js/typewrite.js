const TypeWriter = function(txtElement, words, wait=3000){
    this.txtElement = txtElement;
    this.words = words;
    this.txt ='';
    this.wordIndex = 0;
    this.wait = parseInt(wait, 10);
    this.type();
    this.isDeleting = false;
}

//Type Method
TypeWriter.prototype.type = function(){
    const current = this.wordIndex % this.words.length;
    //Current index of word
    console.log(current);
    
    //Get full current word
    const fullTxt = this.words[current];
    
    //Check if deleting
    if(this.isDeleting){
    //remove chara
    this.txt = fullTxt.substring(0,this.txt.length-1);
    }
    else{
    //add chara
    this.txt = fullTxt.substring(0,this.txt.length+1);
    }
    console.log(fullTxt);
    //insert txt to elem
    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

    //Initial Type speed
    let typeSpeed = 250;

    if(this.isDeleting){
        typeSpeed = 200;
    }

    //Check and pause at complete
    if(!this.isDelting&&this.txt === fullTxt){
        typeSpeed = this.wait;
        this.isDeleting = true;
    }
    else if(this.isDeleting && this.txt === ''){
        this.isDeleting = false;
        this.wordIndex++;
        //Pause before start type
        typeSpeed = 1000;
    }

    setTimeout(() => this.type(), typeSpeed)
}

// Init On DOM Load
document.addEventListener("DOMContentLoaded",init);

//Init App
function init(){
    const txtElement = document.querySelector('.txt-type')
    const words = JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait');
    //Init typewriter
    new TypeWriter(txtElement, words, wait);
}