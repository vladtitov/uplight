/**
 * Created by VladHome on 5/28/2015.
 */
///<reference path='typings/jquery.d.ts' />
var CLICK = CLICK || 'click';
var uplignt;
(function (uplignt) {
    var ContactForm = (function () {
        function ContactForm(id) {
            var _this = this;
            this.id = id;
            this.view = $(id);
            this.btn = this.view.find('[type=submit]').on(CLICK, function (evt) { return _this.onSubmit(evt); });
        }
        ContactForm.prototype.createAlert = function (msg, cl) {
            //  var par = this.btn.parent();
            var div = $('<div>').addClass(cl).html(msg).insertBefore(this.btn);
            setTimeout(function () {
                div.remove();
            }, 4000);
        };
        ContactForm.prototype.onSubmit = function (evt) {
            var _this = this;
            var data = {};
            data.formid = this.id;
            data.url = window.location.href;
            this.view.find('.form-control').each(function (num, el) {
                data[el.getAttribute('id')] = $(el).val();
            });
            // data.formsid= this.view.find('input')
            // data.text= this.view.find('textarea').val();
            console.log(data);
            $.post('sendMessage.php', JSON.stringify(data)).done(function (res) { return _this.onSendSuccess(res); }).fail(function () { return _this.onFail(); });
        };
        ContactForm.prototype.onSendSuccess = function (res) {
            if (res == 'success') {
                this.createAlert('Thank you for sending us message we will contact you soon', 'success msg');
            }
            else
                this.createAlert('Error', 'error msg');
        };
        ContactForm.prototype.onFail = function () {
            this.createAlert('Fail', 'error msg');
        };
        return ContactForm;
    })();
    var form = new ContactForm('#Contact-Form');
})(uplignt || (uplignt = {}));
//# sourceMappingURL=ContactForm.js.map