body{
  background: #0c192c
}
.header{
color: #fff;
text-align:center ;

}
.content{
  color: #fff;
  text-align: center;
}
p, p2{
font-style: italic;
margin-top: 52;

}
.Picture{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 9%;

}
.container{
position: relative;
width: 100%;
height: 100vh;
overflow: hidden;
}

.bubble{
  position: relative;
  display: flex;
}

.bubble span{
position: relative;
width: 30px;
height: 30px;
background: #4fc3dc;
margin: 0 40px;
border-radius: 50%;
box-shadow: 0 0 0 10px #4fc3dc44, 0 0 50px #4fc3dc, 0 0 100px #4fc3dc;
animation: animate 15s linear infinite;
animation-duration: calc(30s / var(--i));
}

.bubble span:nth-child(even){
  background: #4fc3dc;
  box-shadow: 0 0 0 10px #4fc3dc44, 0 0 50px #4fc3dc, 0 0 100px #4fc3dc;

}
@keyframes animate{

  0%{
    transform: translateY(100vh) scale(0);
  }
  100%{
    transform: translateY(-10vh) scale(1);
  }
}
