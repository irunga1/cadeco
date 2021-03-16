class Menu{
    constructor(nombre,edad){
        this.nombre = nombre;
        this.edad = edad;
    }
    openNav(){
        document.getElementById("mySidenav").style.width = "250px";
    }
    closeNav(){
        document.getElementById("mySidenav").style.width = "0";
    }
}

obj1 = new Menu();
obj1.openNav();
obj1.closeNav();