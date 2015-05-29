/**
 * Created by VladHome on 5/28/2015.
 */
    ///<reference path='typings/jquery.d.ts' />
    var CLICK = CLICK || 'click';
module uplignt{
    class ContactForm{
        private  view:JQuery
        private btn:JQuery
        constructor(private id:string){
            this.view = $(id);
            this.btn = this.view.find('[type=submit]').on(CLICK,(evt)=>this.onSubmit(evt))

        }

        private createAlert(msg,cl){
          //  var par = this.btn.parent();

           var div =$('<div>').addClass(cl).html(msg).insertBefore(this.btn);

            setTimeout(function(){
                div.remove();
            },4000);
        }

        private onSubmit(evt:JQueryEventObject):void{

            var data:any={};
            data.formid=this.id;
            data.url= window.location.href;
            this.view.find('.form-control').each(function(num,el:HTMLInputElement){ data[el.getAttribute('id')] = $(el).val(); })
           // data.formsid= this.view.find('input')

           // data.text= this.view.find('textarea').val();

            console.log(data);
          $.post('sendMessage.php',JSON.stringify(data)).done((res)=>this.onSendSuccess(res)).fail(()=>this.onFail())
        }

        private onSendSuccess(res):void{
            if(res=='success'){
                    this.createAlert('Thank you for sending us message we will contact you soon','success msg');
            }else  this.createAlert('Error','error msg');
        }
        private onFail():void{
            this.createAlert('Fail','error msg');
        }
    }

    var form:ContactForm = new ContactForm('#Contact-Form');
}