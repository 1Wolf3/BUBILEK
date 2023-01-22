> # Projekt WAP Hotel
***
> ## This project was created as homework for WAP class in third year of high school.

> ## Let's describe the code in parts.
***

> # HTML
> ## Navbar
>> ### First of all I've created HTML files for every page.
>> ### In every HTML file I created navigation bar with 4 tabs and a logo of our School
>>> ### Created by Gh0st-ed

***

``` HTML
<div class="Navbar">
        <ul>
            <li><a href="fotogalerie.html"> Fotogalerie </a></li>
            <li><a href="kontakt.html"> Kontakt </a></li>
            <li><a href="sluzby.html"> Služby </a></li>
            <li><a href="index.html"> Úvod </a></li>
        </ul>
        <a href="http://www.skolavdf.cz/"> <img src="images/logo_logo.png" alt="logo"> </a>
    </div>
```
***

> ### Then I've edited every page different based on its content

***

> # index.html
>> ### Here is just Welcome text, adress and a picture. This page is introductory.  

***

> 1. Spancolor div is just for styling spans in CSS later
> 2. WelcomeFlex div is used for styling h1
> 3. UvodBlock div is for styling text content of the page
> 4. UvodObrazek div is for styling img on the first page

***

>> ![index.png](/README/HTML%20img/index.png)

***

> # sluzby.html
>> ### Here I've made a few Sections with different content. This page is just for info what the hotel offers and how much will you pay for it.

***

> 1.  Spancolor div is just for styling spans in CSS later
    > * You can see that there are no spans, I kept this div here just because of responive design later in CSS for font-size and line-height.
    > * I should rename it.
> 2.  SluzbyWelcomeFlex, SlubyUvodBlock - styling h1, h2
> 3.  There is lot of section with lot of IDs for styling. These section are for text on the page. Every section is different, one is about what the hotel offers, second is how much will you pay etc.

 ---

>> ![sluzby](/README/HTML%20img/sluzby.png)

***

> # kontakt.html
> ### Here are phone numbers, e-mail and billing adress (contacts)

***

>> 1. Spancolor div is just for styling spans in CSS later
>> 2. KontaktyWelcomeFlex, KontaktyUvodBlock divs - styling h1, h2
>> 3. KontaktUdaje div is for contacts like e-mail and numbers
>> 4. All phone numbers are in table

***

```HTML
<table>
    <tr>
        <th> Kam se dovoláte </th>
        <th> Telefonní číslo </th>
    </tr>
    <tr>
        <td> Kancelář </td>
        <td> 739 418 147 </td>
    </tr>
    <tr>
        <td> Recepce </td>
        <td> 775 475 549 </td>
    </tr>
    <tr>
        <td> Pevná linka </td>
        <td> 412 331 160</td>
    </tr>
</table>
```
***

>> ![kontakt](/README/HTML%20img/kontakt.png)

***

> # fotogalerie.html
>> ### This tab is for photos of the indoors and outdoors of hotel

> 1. Spancolor div is just for styling spans in CSS later
> 2. GalerieWelcomeFlex, GalerieUvodBlock divs - styling h1, h2
> 3. There are multiple divs named Galerie, every div is the same only with different img
    * In Galerie divs are also desc divs, they are used for the description of the img

***

```HTML
<div class="Galerie">
        <a target="_blank" href="/Faze1/fotogalerie/Budova.png">
        <img src="/Faze1/fotogalerie/Budova.png" alt="Budova" width="600" height="400">
        </a>
    <div class="desc"> Budova vzdělávacího <span> střediska </span> <div>
</div>
```
***

>> ![fotogalerie](/README/HTML%20img/fotogalerie.png)

***

> # CSS
>> ## First I styled the Navbar.

***

> 1. I like Consolas font the most so thats why I use it
> 2. It's just a simple Navbar

***

>> ![Navbar](/README/CSS%20img/Navbar.png)

> ## index.html style

***

>> ![index](/README/CSS%20img/index.png)

***

> ## sluzby.html style

***

> 1. Every column is styled the same so thats why is the rest closed
> 2. Every ID under columns is styled the same so they are closed as well

***

>> ![sluzby](/README/CSS%20img/sluzby.png)

***

>> ## kontakt.html style

***

> 1. The closed IDs are style the same ase .FakturAdresa{}
> 2. This code bellow is to style background of every second table row.

***

```CSS
tr:nth-child(even)  {
    background-color:white;
}
```

***

>> ![kontakt](/README/CSS%20img/kontakt.png)

***

>> ## fotogalerie.html style

***

> 1. IMGs are styled to width: 100%; so they act responsive in browser 
> 2. .desc is description under every img

***
 
>> ![fotogalerie](/README/CSS%20img/fotogalerie.png)

*** 

>> ## Span style

***

> 1. font-size: 1vw; is used so text text act responsive in browser
> 2. Every text from every page is in Spancolor div so I don't have to use a lot of divs

***

>> ![Span](/README/CSS%20img/Span.png)

***

>> ## Responsive style

***

> 1. I made every div that was causing trouble responsive
> 2. Every text responsive

***

>> ![Responsive](/README/CSS%20img/Responsive.png)

***


