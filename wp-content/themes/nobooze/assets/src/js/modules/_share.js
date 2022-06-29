import $ from 'jquery';

export class Share {
    constructor() {
        this.total = $('.js-share-total')
        this.thisPost = $('.nm__share')
        this.facebookNum = this.thisPost.data('facebook')
        this.allShare = this.facebookNum
        this.flag = false
        this.events()
    }

    events() {
        this.totalNumber.bind(this)()
        $(".js-share").on("click", this.shareDispatcher.bind(this))
    }
    
    // Methods
    shareDispatcher(e) {
        e.preventDefault();
        if(!this.flag) {
            this.createShare(e)
        }
    }
    
    totalNumber() {
        if(this.allShare == 0) {
            this.total.html("0")
        } else {
            this.total.html(this.allShare)
        }
    }
    
    createShare(e) {
        let thisShare = $(e.target).parents('.js-share')
        let thisTitle = $(thisShare).data('title')
        let link = $(thisShare).attr('href');

        this.flag = true;
        
        switch(thisTitle){
            case 'facebook':
                this.facebookNum += 1;
                break;   
        }

        $.ajax({
            beforeSend: (xhr) => {
                xhr.setRequestHeader('X-WP-Nonce', noboozeData.nonce)
            },
            url: noboozeData.root_url + `/wp-json/wp/v2/${noboozeData.post_type == "post" ? "posts" : noboozeData.post_type}/${this.thisPost.data('id')}`,
            type: 'POST',
            data: { 
                'acf': {
                    'facebook': this.facebookNum
                }
            },
            success: (response) => {
                $('body').addClass('waiting');
                window.location.href = link;
            },
            error: (response) => {
                window.location.href = link;
            }
        });
    }
}