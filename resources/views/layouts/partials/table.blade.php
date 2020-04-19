{{-- 
	Biblioteca: ://datatables.net/download/

	Configuração de download selecionada:
	Step1. Choose a styling framework: Bootstrap 4
	Step2. Select packages: DataTables
	Extentions: AutoFill, Buttons, FixedColumns, Responsive, Scroller, Select
 --}}

@push('styles')
    <link href="/css/datatables/datatables.min.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="/js/datatables/datatable-language.js"></script>
    <script src="/js/datatables/datatables.min.js"></script>
@endpush