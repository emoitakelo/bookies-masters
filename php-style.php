<?php
header('content-type: text/css; charset:UTF-8')
?>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
html {
  /* background-color: #23ca5a;*/
  font-family: "Dosis", sans-serif;
  font-size: 16px;
  color: rgb(14, 1, 1);
}
a {
  color: #06f76a;
  cursor: pointer;
  text-decoration: none;
}
a:hover {
  cursor: pointer;
  opacity: 0.8;
  background-color: #1e4040;
  border-radius: 5px;
  /*padding-left: 5px;*/
}
/*.back:hover {
  background-color: antiquewhite;*/
}

.find:hover {
  background-color: #1e4040;
  border-radius: 5px;
  padding-left: 2px;
  width: 50px;
}
.more:hover {
  background-color: #1e4040;
  border-radius: 5px;
  padding-left: 2px;
  width: 40px;
}
#log:hover {
  background-color: rgb(14, 194, 53);
  border-radius: 5px;
  padding-left: 2px;
  color: antiquewhite;
}
#reg:hover {
  background-color: red;
  border-radius: 5px;
  padding-left: 2px;
  color: antiquewhite;
}
#moha:hover {
  background-color: rgb(14, 194, 53);
  border-radius: 5px;
  padding-left: 2px;
  color: antiquewhite;
}
header,
footer {
  background-color: #1e4040;
  color: #71d99e;
}
h1,
h2,
h3 h4 {
  margin-top: 10px;
  margin-bottom: 20px;
}
p {
  margin-bottom: 15px;
}
main,
aside {
  padding: 20px 5%;
}
img {
  border-radius: 5px;
  box-shadow: 1px 2px 3px 1px rgba(0, 0, 0, 0.2);
  max-width: 100%;
}
.article h4 {
  color: rgb(255, 145, 0);
}
aside h4 {
  color: rgb(255, 145, 0);
}

/*CSS OUTER GRID STYLES
*/

.outer-grid {
  display: grid;
  height: 100vh;
  grid-template-rows: 70px 1fr;
  grid-template-columns: 90px 1fr;
  grid-template-areas:
    "alias-header alias-header"
    "alias-innergrid alias-innergrid";
}
.outer-grid-expanded {
  grid-template-areas:
    "alias-header alias-header"
    "alias-nav alias-innergrid";
}
.hide-nav {
  display: none;
}
header {
  grid-area: alias-header;
}
nav {
  grid-area: alias-nav;
}

/*CSS INNER GRID STYLES
*/

.inner-grid {
  overflow-y: scroll;
  display: grid;
  grid-area: alias-innergrid;
  grid-template-rows: 1fr auto 60px;
  grid-template-columns: 1fr;
  grid-template-areas:
    "alias-main alias-main"
    "alias-aside alias-aside"
    "alias-footer alias-footer";
}
main {
  grid-area: alias-main;
}
aside {
  grid-area: alias-aside;
}
footer {
  grid-area: alias-footer;
}

/*
HEADER STYLES
*/

header {
  display: flex;
  justify-content: space-between;
  justify-items: center;
  padding: 0 20px;
}
.left-header {
  display: flex;
  align-items: center;
}
.fa-bars {
  margin-right: 10px;
  margin-bottom: 7px;
  color: rgb(255, 145, 0);
}
.fa-bars:hover {
  cursor: pointer;
  opacity: 0.6;
}
.right-header {
  display: block;
  align-items: center;
}
.header-link {
  display: flex;
  flex-direction: column;
  align-items: left;
  margin-left: 10px;
  margin-top: 10px;
}
.header-link a {
  font-size: 0.7em;
}
#reg {
  color: red;
}
#log {
  color: rgb(14, 194, 53);
}
#master {
  color: rgb(255, 145, 0);
  font-size: 1.2rem;
}

/*
NAV STYLES
*/

nav {
  padding-top: 20px;
  border-right: 1px solid rgba(0, 0, 0, 0.1);
}
.nav-link {
  display: flex;
  flex-direction: column;
  align-items: left;
  color: rgb(14, 194, 53);
  margin-top: 15px;
  margin-left: 10px;
  font-size: 14px;
}
.nav-link a {
  color: rgb(14, 194, 53);
  text-decoration: none;
}
.nav-link:hover {
  cursor: pointer;
  opacity: 0.8;
}
.contact {
  align-items: center;
  justify-content: center;
  padding: 10px;
}
.contact h3 {
  color: rgb(255, 145, 0);
}
.contact p {
  font-size: 14px;
}

/*
MAIN STYLES
*/

.day {
  display: flex;
  justify-items: center;
  justify-content: space-between;

  /*border: 2px solid rgb(98, 133, 19);
  border-radius: 5px;*/
}
.day-link {
  border: 2px solid white;
  border-radius: 5px;
  margin-top: 10px;
  background-color: #1e4040;
  padding: 2px;
}
.day-link:hover {
  cursor: pointer;
  opacity: 0.6;
}
.day-link a {
  color: rgb(14, 194, 53);
}
.banker {
  /* background-color: #adff2f;*/
  color: rgb(255, 145, 0);
  margin-top: 10px;
}
.date {
  margin-top: 10px;
  font-size: 12px;
  color: chocolate;
}
table {
  text-align: center;
  border: 1px solid white;
  /*padding: 10px;
  margin-top: 10px;
  margin-right: 0px;*/
}
th {
  color: #1e4040;
}
td {
  font-size: 12px;
}

.fc {
  text-align: left;
}
.predict {
  margin-bottom: 20px;
}
.article p {
  font-size: 14px;
}

/*
SIDEBAR STYLES
*/

aside {
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

.sidebar a {
  display: flex;
  flex-direction: column;
  color: rgb(14, 194, 53);
  /*aside a {*/
  margin-top: 10px;
  margin-left: 10px;
  font-size: 14px;
}

/*FOOTER STYLES
*/

footer b {
  color: rgb(255, 145, 0);
  margin: 0;
}
footer a {
  color: rgb(14, 194, 53);
  font-size: 0.8em;
}
footer {
  display: flex;
  justify-content: center;
  align-items: center;
}

/*
BREAK POINTS
*/

@media (min-width: 576px) {
  nav {
    display: block !important;
  }
  .outer-grid {
    grid-template-areas:
      "alias-header alias-header"
      "alias-nav alias-innergrid";
  }
  .fa-bars {
    display: none;
  }
  .day {
    justify-content: left;

    /* border: none;
    border-radius: none;*/
  }
}

@media (min-width: 992px) {
  .inner-grid {
    grid-template-rows: 1fr 60px;
    grid-template-columns: minmax(auto 700px) 1fr;

    grid-template-areas:
      "alias-main alias-aside"
      "alias-footer alias-footer";
  }
  aside {
    border-left: 1px solid rgba(0, 0, 0, 0.1);
  }
  .sidebar {
    margin-top: 15px;
  }
  /*.day {
    justify-content: left;
  }*/
}

@media (min-width: 1440px) {
  .outer-grid {
    grid-template-columns: 1fr 950px 1fr;
    grid-template-areas:
      "alias-header alias-header alias-header"
      "alias-nav alias-innergrid alias-innergrid";
  }
  header {
    display: grid;
    grid-template-columns: 1fr 950px 1fr;
    grid-template-areas: "alias-lh . alias-rh";
  }
  .left-header {
    grid-area: alias-lh;
    justify-self: end;
  }
  .right-header {
    grid-area: alias-rh;
    justify-self: start;
  }
  nav {
    display: flex !important;
    flex-direction: column;
    align-items: flex-end;
    padding-right: 15px;
  }
  .nav-link {
    margin-left: 15px;
  }
}
