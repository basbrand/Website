!function(t,e,i,s){function n(e,i){this.element=e,this._name=a,this._defaults=t.fn.toggle.defaults,this.options=t.extend({},this._defaults,i),this.init()}var a="toggle";t.extend(n.prototype,{init:function(){this.target=t(t(this.element).data("toggle")),this.state=this.target.hasClass("is-active")?"is-active":"is-inactive",this.target.addClass(this.state),this.buildCache(),this.bindEvents()},destroy:function(){this.unbindEvents(),this.$element.removeData()},buildCache:function(){this.$element=t(this.element)},bindEvents:function(){var t=this;t.$element.on("click."+t._name,function(e){e.preventDefault(),t.changeState.call(t)})},unbindEvents:function(){this.$element.off("."+this._name)},changeState:function(){if(this.target.hasClass("tab")){if(this.target.hasClass("is-active"))return;this.target.parents(".tab-grp").find(".tab, .panel").removeClass("is-inactive is-active").addClass("is-inactive")}this.target.toggleClass("is-active").toggleClass("is-inactive"),this.toggleState()},toggleState:function(){"is-active"==this.state?this.state="is-inactive":this.state="is-active"},callback:function(){var t=this.options.onComplete;"function"==typeof t&&t.call(this.element)}}),t.fn.toggle=function(e){return this.each(function(){t.data(this,"plugin_"+a)||t.data(this,"plugin_"+a,new n(this,e))}),this},t.fn.toggle.defaults={property:"value",onComplete:null}}(jQuery,window,document);