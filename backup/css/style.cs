* {
  box-sizing: border-box;
  margin: 0px;
  padding: 0px;
}

.fixedtop {
  position: fixed;
  /* Set the navbar to fixed position */
  top: 0;
  /* Position the navbar at the top of the page */
  width: 100%;
  /* Full width */
}

.margins {
  width: 80%;
  margin: 0 auto;
}
@media (max-width: 800px) {
  .margins {
    width: 95%;
  }
}
@media (max-width: 1300px) and (min-width: 800px) {
  .margins {
    width: 90%;
  }
}

.marginleft {
  margin-left: 15%;
}
@media (max-width: 1300px) and (min-width: 800px) {
  .marginleft {
    margin-left: 0px;
    width: 90%;
    margin: 0 auto;
  }
}
@media (max-width: 800px) {
  .marginleft {
    margin-left: 0px;
    width: 90%;
    margin: 0 auto;
  }
}

@media (max-width: 800px) {
  .phonetop {
    margin-top: 40px;
  }
}

/*menuToggle*/
#menuToggle {
  display: block;
  position: relative;
  top: 20px;
  right: 0px;
  z-index: 1;
  -webkit-user-select: none;
  user-select: none;
  width: 100%;
}
@media (min-width: 1300px) {
  #menuToggle {
    display: none;
  }
}
@media (max-width: 1300px) and (min-width: 800px) {
  #menuToggle {
    display: none;
    right: 15px;
    width: 105%;
  }
}

#menuToggle a {
  color: #130D6F;
  text-decoration: none;
  transition: color 0.3s ease;
  text-align: center;
  font-size: 21px;
  font-family: "geomanistregular";
}

#menuToggle a:hover {
  color: #5E72EB;
}

#menuToggle input {
  display: block;
  width: 40px;
  height: 32px;
  position: absolute;
  top: -7px;
  left: -2px;
  cursor: pointer;
  opacity: 0;
  z-index: 2;
  -webkit-touch-callout: none;
}

#menuToggle span {
  display: block;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;
  background: #0D0745;
  border-radius: 3px;
  z-index: 1;
  transform-origin: 4px 0px;
  transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1), background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1), opacity 0.55s ease;
}

#menuToggle span:first-child {
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2) {
  transform-origin: 0% 100%;
}

#menuToggle input:checked ~ span {
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background: #0D0745;
}

#menuToggle input:checked ~ span:nth-last-child(3) {
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

#menuToggle input:checked ~ span:nth-last-child(2) {
  transform: rotate(-45deg) translate(0, -1px);
}

#menuToggle input:checked ~ ul {
  transform: none;
}

#menu {
  position: absolute;
  width: 120%;
  margin: -100px 0 0 -40px;
  padding: 20px;
  padding-top: 125px;
  background: #FEC195;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1);
}

#menu li {
  padding: 10px 0;
  font-size: 1em;
}

/*mobile logo*/
.tinylogo img {
  width: 30px;
  position: absolute;
  top: 20px;
  right: 20px;
}
@media (min-width: 1300px) {
  .tinylogo img {
    display: none;
  }
}
@media (max-width: 1300px) and (min-width: 800px) {
  .tinylogo img {
    display: block;
  }
}

/*logo*/
.logo {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100px;
}
.logo h1 {
  background: url("../imgs/logomorado.svg");
  background-size: cover;
  width: 80px;
  height: 80px;
  text-indent: -9999px;
}
.logo h1 a {
  background-image: url("../imgs/logorosa.svg");
  background-size: cover;
}

body {
  position: relative;
  background-color: #FCFCFC;
}

.leftnav {
  display: block;
  background-color: #FEC195;
  position: fixed;
  left: 0px;
  top: 0px;
  width: 10%;
  height: 100vh;
  letter-spacing: 2px;
  transition-delay: 0s;
  transition-duration: 0.4s;
  transition-property: all;
  transition-timing-function: line;
}
@media (max-width: 1300px) and (min-width: 800px) {
  .leftnav {
    display: none;
  }
}
@media (max-width: 800px) {
  .leftnav {
    display: none;
  }
}
.leftnav .logo {
  margin: 0 auto;
  padding: 20px;
}
.leftnav .menuRegular {
  position: absolute;
  text-align: center;
  font-size: 21px;
  font-family: "geomanistregular";
  top: 30%;
  left: 25%;
  transition-delay: 0s;
  transition-duration: 0.4s;
  transition-property: all;
  transition-timing-function: line;
}
.leftnav .menuRegular a {
  text-decoration: none;
  color: black;
  display: block;
  padding: 15px;
  font-size: 18px;
}
.leftnav .menuRegular a:hover {
  color: #5E72EB;
}
.leftnav .menuRegular .active {
  color: #5E72EB;
}
.leftnav .socialmedia {
  position: absolute;
  bottom: 20px;
  padding: 20px;
  left: 15%;
  font-family: "geomanistregular";
  transition-delay: 0s;
  transition-duration: 0.4s;
  transition-property: all;
  transition-timing-function: line;
}
.leftnav .socialmedia svg {
  padding: 4px;
  width: 25px;
  fill: black;
}
.leftnav .socialmedia svg:hover {
  fill: #5E72EB;
}
.leftnav .socialmedia a {
  text-decoration: none;
  color: black;
  display: block;
  display: inline;
}
.leftnav .socialmedia a:hover {
  color: #5E72EB;
}
.leftnav .socialmedia .active {
  color: #5E72EB;
}

.leftnav:hover {
  width: 15%;
}
.leftnav:hover .menuRegular {
  left: 35%;
}
.leftnav:hover .socialmedia {
  left: 30%;
}

.homecontent {
  width: 100%;
  height: 100vh;
  position: relative;
}
@media (min-width: 1300px) {
  .homecontent {
    background-image: url(imgs/compuwire.gif);
    background-color: #FCFCFC;
    background-repeat: no-repeat;
    position: relative;
    background-size: 35% 50%;
    background-position: bottom right;
  }
}
@media (max-width: 1300px) and (min-width: 800px) {
  .homecontent {
    background-image: url(imgs/compuwire.gif);
    background-color: #FCFCFC;
    background-repeat: no-repeat;
    position: relative;
    background-size: 35% 50%;
    background-position: bottom right;
  }
}
.homecontent .hometext {
  position: absolute;
  width: 80%;
  top: 20%;
}
@media (max-width: 1300px) and (min-width: 800px) {
  .homecontent .hometext {
    position: absolute;
    top: 100px;
  }
}
@media (max-width: 800px) {
  .homecontent .hometext {
    top: 50px;
    width: 100%;
  }
}
.homecontent img {
  display: none;
  width: 100%;
}
@media (max-width: 800px) {
  .homecontent img {
    display: block;
  }
}
@media (max-width: 1300px) and (min-width: 800px) {
  .homecontent img {
    display: none;
  }
}
.homecontent h2 {
  font-family: "geomanistregular";
  font-size: 60px;
}
@media (max-width: 1300px) and (min-width: 800px) {
  .homecontent h2 {
    font-size: 36px;
  }
}
@media (max-width: 800px) {
  .homecontent h2 {
    font-size: 36px;
  }
}
@media (max-width: 800px) {
  .homecontent h1 {
    font-size: 21px;
  }
}
@media (min-width: 1300px) {
  .homecontent .center {
    margin-top: 80px;
    margin-bottom: 20px;
  }
}
@media (max-width: 1300px) and (min-width: 800px) {
  .homecontent .center {
    margin-top: 10px;
    margin-bottom: 10px;
  }
}
.homecontent h1 {
  font-family: "geomanistregular";
}

.cta {
  font-size: 21px;
  border: none;
  padding: 10px 50px;
  width: 300px;
  border-radius: 5px;
  cursor: pointer;
  color: white;
  background-size: 200%;
  transition: 0.6s ease;
  letter-spacing: 1px;
  background-image: linear-gradient(to left, #FF9190, #0D0745, #FF9190);
  margin-top: 10px;
  margin-bottom: 20px;
}

a {
  text-decoration: none;
}

.cta:hover {
  background-position: right;
}

@media (max-width: 800px) {
  .cta {
    margin-bottom: 20px;
    width: 100%;
    display: block;
    text-align: center;
  }
}
.notfound {
  padding-top: 50px;
  width: 50%;
}
.notfound img {
  width: 100%;
}
.notfound h1 {
  font-family: "geomanistregular";
}

.ipadnav {
  font-family: "geomanistregular";
  font-size: 21px;
}
.ipadnav a {
  padding-right: 20px;
  color: #0D0745;
}
.ipadnav a:hover {
  color: #FF9190;
}
@media (max-width: 800px) {
  .ipadnav {
    display: none;
  }
}
@media (min-width: 1300px) {
  .ipadnav {
    display: none;
  }
}
@media (max-width: 1300px) and (min-width: 800px) {
  .ipadnav {
    display: block;
    position: fixed;
    top: 20px;
  }
}

/*# sourceMappingURL=style.cs.map */
