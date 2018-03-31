import $ from 'jquery';

class Modal{
    constructor(){
        this.openModalButton = $('.open-modal');
        this.modal = $('.modal');
        this.closeModalButton = $('.modal__close');
        this.events();
    }

    events(){
        //Clicking the open modal
        this.openModalButton.click(this.openModal.bind(this));
        //Clickin x
        this.closeModalButton.click(this.closeModal.bind(this));
        //pushes any key to close
        $(document).keyup(this.keyPress.bind(this));
    }
    
    keyPress(e){
        if(e.keyCode == 27){
            this.closeModal();
        }
    }

    openModal(){
        this.modal.addClass('modal--is-visible');
        return false;
    }

    closeModal(){
        this.modal.removeClass('modal--is-visible');
    }
}

export default Modal;