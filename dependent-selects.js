var handle_dependent_selects = function($parent) {
    var $child = document.getElementById($parent.getAttribute('data-child-id')),
        $selected = $parent.options[$parent.selectedIndex],
        parent_val = $selected.value;

    for (var i=0; i<$child.options.length; i++) {
        var $option = $child.options[i];
        if($option.value != '') {
            $option.setAttribute('hidden',true);
        }
    };

    if(parent_val) {
        var child_options = $selected.getAttribute('data-child-options'),
            child_options_array = child_options.split('|#');
        
        for (i=0; i<$child.options.length; i++) {
            var $option = $child.options[i];
            if ($option.value == "") {
                $option.innerText = "--------";
                continue;
            }
            if(child_options_array.indexOf($option.value) != -1) {
                $option.removeAttribute('hidden');
            }
        };

    } else {
        var show_text = $child.getAttribute('data-text-if-parent-empty');
        if(!show_text) {
            show_text = 'Select ' + $parent.name;
        }
        for (i=0; i<$child.options.length; i++) {
            var $option = $child.options[$child.selectedIndex];
            if ($option.value == "") {
                $option.innerText = '- ' + show_text + ' -';
                break;
            }
        };
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var $parents = document.getElementsByClassName('dependent-selects__parent');
    for (var i=0; i<$parents.length; i++) {
        handle_dependent_selects($parents[i]);
        $parents[i].addEventListener('change', function() {
            handle_dependent_selects(this)
        })
    }
}, false);
