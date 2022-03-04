@props(['id', 'maxWidth'])

@php
$id = $id ?? md5($attributes->wire('model'));

$maxWidth = [
  
    'sm' => 'modal-sm',
    'lg' => 'modal-lg',
    'xl' => 'modal-xl',
][$maxWidth ?? 'lg'];
@endphp

<div
    x-data="{
        show: @entangle($attributes->wire('model')).defer,
        focusables() {
            // All focusable element types...
            let selector = 'a, button, input:not([type=\'hidden\'], textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

            return [...$el.querySelectorAll(selector)]
                // All non-disabled elements...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
    }"
    x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-hidden');
        } else {
            document.body.classList.remove('overflow-hidden');
        }
    })"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    id="{{ $id }}"
    class=" position-fixed   px-2 py-4 px-sm-5 "
    style="display: none;  top: 0px;
                 right: 0px;
                  bottom: 0px;
                 left: 0px;
                 overflow-y: auto;
                 z-index: 50;"
>
    <div x-show="show" class="position-fixed " 
                    style=" top: 0px;
                    right: 0px;
                    bottom: 0px;
                    left: 0px;
                    --tw-translate-x: 0;
                        --tw-translate-y: 0;
                        --tw-rotate: 0;
                        --tw-skew-x: 0;
                        --tw-skew-y: 0;
                        --tw-scale-x: 1;
                        --tw-scale-y: 1;
                        transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                        transition-property: all;
                          transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                        transition-duration: 500ms;
                        transition: opacity .15s linear;"
    
                    x-on:click="show = false" 
                   {{--  x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" --}}>
        <div class="position-absolute  bg-dark" 
        style="top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        opacity: 0.40;">
        </div>
    </div>

    <div x-show="show" class="mb-6 bg-white overflow-hidden shadow-lg   w-sm-full {{ $maxWidth }} mx-sm-auto"
                        style="border-radius: 0.5rem/* 8px */;
                        --tw-translate-x: 0;
                        --tw-translate-y: 0;
                        --tw-rotate: 0;
                        --tw-skew-x: 0;
                        --tw-skew-y: 0;
                        --tw-scale-x: 1;
                        --tw-scale-y: 1;
                        transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                        transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 150ms;"
                   {{--  x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" --}}>
        {{ $slot }}
    </div>
</div>
