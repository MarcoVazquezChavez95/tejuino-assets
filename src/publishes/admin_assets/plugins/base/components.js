//import timepicker from '/admin_assets/components/Timepicker.vue';

Vue.component('toggle', {
    model: {
        prop: 'checked'
    },
    props: { checked: Boolean },
    data: function(){
       return { }
    },
    template: `
        <input
            type="checkbox"
            v-bind:checked="checked"
            v-on:change="$emit('change', $event.target.checked)"
        />
    `,
});

Vue.component('timepicker', {
    name: 'time-picker',
    model: {
        prop: 'value',
        event: 'change'
    },
    props: { value: String },
    methods: {
        updateTime(time){
            alert(time)
        }
    },
    template: `
        <div class="input-group date">
            <input type="text" class="form-control"
                v-bind:value="value"
                v-on:change="$emit('change', $event.target.value)"
            />
            <span class="input-group-addon"><i class="fa fa-clock"></i></span>
        </div>
    `,
    mounted: function() {
        var vm = this;
        $(this.$el).datetimepicker({
            format: 'LT'
        }).on('dp.change', function(e){
            vm.$emit('change', e.date.format('hh:mm A'));
        });
    },
    beforeDestroy: function() {
        $(this.$el).datetimepicker('hide').datepicker('destroy');
    }
});
