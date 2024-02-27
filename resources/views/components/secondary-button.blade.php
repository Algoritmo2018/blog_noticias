<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-secondary']) }} id="btn_fechar_modal" onclick="fecharmodal()">
    {{ $slot }}
</button>
