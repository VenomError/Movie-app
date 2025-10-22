<div class="table-responsive">
    <table {{ $attributes->class(['table', 'table-striped', 'table-nowrap']) }}>
        <thead class="table-light">
            {{ $head }}
        </thead>
        <tbody>
            {{ $body }}
        </tbody>
    </table>

    {{ $footer ?? '' }}
</div>
