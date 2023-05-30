<?php
header('content-type: text/css; charset:UTF-8')
?>
body {
  margin: 0;
  padding: 0;
  background: url();
  background-size: cover;
  background-position: center;
  font-family: "Dosis", sans-serif;
}
.loginbox {
  width: 240px;
  /*height: 100vh;*/
  background: #fff;
  color: #0cd61c;
  /*top: 50%;
  left: 50%;
  bottom: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 50px 30px;*/
}
.log {
  display: flex;
  flex-direction: column;
}
.avator {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50%-50px);
}
h4 {
  padding: 0 0 20px;
  margin: 0;
  text-align: left;
  font-size: 22px;
  font-weight: bold;
  color: rgb(255, 145, 0);
  margin-bottom: 10px;
}
.loginbox p {
  padding: 0;
  margin: 0;
  font-weight: bold;
}
.loginbox input {
  width: 100%;
  margin-bottom: 20px;
}
.loginbox input[type="text"],
input[type="password"],
input[type="email"] {
  border: none;
  border-bottom: 1px solid #1e4040;
  background: transparent;
  outline: none;
  height: 30px;
  color: #1e4040;
  font-size: 12px;
}
.loginbox input[type="submit"] {
  border: none;
  outline: none;
  height: 35px;
  background: #1e4040;
  border-radius: 5px;
  color: #06f76a;
  font-size: 18px;
}
.loginbox input[type="submit"]:hover {
  cursor: pointer;
  background: #06f76a;
  opacity: 0.6;
  color: #000;
}
.loginbox a {
  text-decoration: none;
  line-height: 20px;
  color: rgb(255, 145, 0);
  font-size: 12px;
}
.loginbox a:hover {
  color: #06f76a;
}
.regsuccess a {
  color: #06f76a;
  cursor: pointer;
  text-decoration: none;
}
.regsuccess {
  font-family: "Dosis", sans-serif;
  align-items: center;
  justify-content: center;
  padding: 30px;
}
