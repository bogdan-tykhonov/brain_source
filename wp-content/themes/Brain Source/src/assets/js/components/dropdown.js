export default () => {
    return{
        open: false,
        mobOpen: window.innerWidth < 576 ?  false : true,
        toggleDropdown(){
            this.open = !this.open;
            this.mobOpen = window.innerWidth < 576 ?  !this.mobOpen : true;
            console.log(this.mobOpen);
        },
        closeDropdown(){
            this.open = false;
        }
    }
}