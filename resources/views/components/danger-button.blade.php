<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger'])  }} id="btn_show_modal" onclick="mostrarmodal()">
    {{ $slot }}
</button>
