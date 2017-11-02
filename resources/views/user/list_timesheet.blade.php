<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Lato:900);
*, *:before, *:after{
  box-sizing:border-box;
}
/*body{
  font-family: 'Lato', sans-serif;
    ;
}*/
div.foo{
  width: 90%;
  margin: 0 auto;
  text-align: center;
}
.letter{
  display: inline-block;
  font-weight: 900;
  font-size: 6em;
  margin: 0.2em;
  position: relative;
  color: #00B4F1;
  transform-style: preserve-3d;
  perspective: 400;
  z-index: 1;
}
.letter:before, .letter:after{
  position:absolute;
  content: attr(data-letter);
  transform-origin: top left;
  top:0;
  left:0;
}
.letter, .letter:before, .letter:after{
  transition: all 0.3s ease-in-out;
}
.letter:before{
  /*color: #fff;*/
  color: green;
  text-shadow: 
    -1px 0px 1px rgba(255,255,255,.8),
    1px 0px 1px rgba(0,0,0,.8);
  z-index: 3;
  transform:
    rotateX(0deg)
    rotateY(-15deg)
    rotateZ(0deg);
}
.letter:after{
  color: rgba(0,0,0,.11);
  z-index:2;
  transform:
    scale(1.08,1)
    rotateX(0deg)
    rotateY(0deg)
    rotateZ(0deg)
    skew(0deg,1deg);
}
.letter:hover:before{
  color: #fafafa;
  transform:
    rotateX(0deg)
    rotateY(-40deg)
    rotateZ(0deg);
}
.letter:hover:after{
  transform:
    scale(1.08,1)
    rotateX(0deg)
    rotateY(40deg)
    rotateZ(0deg)
    skew(0deg,22deg);
}
</style>

<div class="foo">
  <span class="letter" data-letter="T">T</span>
  <span class="letter" data-letter="I">I</span>
  <span class="letter" data-letter="M">M</span>
  <span class="letter" data-letter="E">E</span>
  <span class="letter" data-letter="S">S</span>
  <span class="letter" data-letter="H">H</span>
  <span class="letter" data-letter="E">E</span>
  <span class="letter" data-letter="E">E</span>
  <span class="letter" data-letter="T">T</span>
</div>



<div class="table-responsive">
        
</div>