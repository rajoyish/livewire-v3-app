<div>
    <x-primary-button wire:click="toggleHelp">Toggle Help</x-primary-button>
    <x-secondary-button wire:click="$set('setMagic', 'true')">$set Magic Action</x-secondary-button>
    <x-danger-button wire:click="$toggle('bestToggleHelp')">$toggle Magic Action</x-danger-button>

    @if ($showHelp)
    <div class="bg-green-100 text-green-800 px-4 py-2 mt-4">
           Let's say we have a component to show some helper text when a button is clicked and hide it when it is clicked again. The Livewire component would have a boolean property with the default set to false and a method to toggle the boolean value.
        </div>
    @endif

    @if ($setMagic)
 <div class="bg-yellow-100 text-yellow-800 px-4 py-2 mt-4">
    First, let's take a look at a $set Magic Action. This method accepts two parameters: first, to set which property, and second, to what value. Now the toggleHelp isn't needed at all. If you click the button now, the helper text will be shown.
</div>
    @endif

    @if ($bestToggleHelp)
    <div class="bg-blue-100 text-blue-800 px-4 py-2 mt-4">
           The correct Magic Action would be to use $toggle, which sets boolean values to true/false. After pressing the button, it shows and hides the helper text.
        </div>
    @endif
</div>
