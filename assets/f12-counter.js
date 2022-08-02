f12counter = {
    init() {
        const widgets = document.getElementsByClassName('text-counter-widget');
        console.log(widgets);
        for (let i = 0; i < widgets.length; i++) {
            const widgetElement = widgets.item(i);
            f12counter.run_validation(widgetElement);
            const target = document.getElementById(widgetElement.dataset.target_id);
            target.addEventListener('keyup', () => {
                f12counter.run_validation(widgetElement);
            });
        }

    },
    run_validation(el) {
        const min = el.dataset.min;
        const max = el.dataset.max;
        const target_id = el.dataset.target_id
        const input = document.getElementById(target_id);
        const current_length = input.value.length;
        el.innerHTML = 'L: ' + current_length + ' (' + min + '-' + max + ')';
        if (current_length >= min && current_length <= max) {
            el.classList.add('text-counter-widget-ok');
        } else {
            el.classList.remove('text-counter-widget-ok');
        }
    },
}