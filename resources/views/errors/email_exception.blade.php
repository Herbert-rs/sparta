<table style="font-size: 12px;" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            exception <strong>'{{ $exception->getMessage()  }}'</strong>
        </td>
    </tr>
    <tr>
        <td>
            <br>
            In <strong>{{ $exception->getFile() }}</strong> on line <strong>{{  $exception->getLine() }}</strong>
        </td>
    </tr>
</table>
<hr style="color: #f6f6f6;">
<table  style="font-size: 12px;" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <strong>Stack Trace:</strong>
        </td>
    </tr>
    <tr>
        <td align="left" style="text-align: left;">
            {!! nl2br($exception->getTraceAsString()) !!}
        </td>

    </tr>
</table>
@while($exception = $exception->getPrevious())
    <br>
    <br>
    <table style="font-size: 12px;" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                Next exception <strong>'{{ $exception->getMessage()  }}'</strong>
            </td>
        </tr>
        <tr>
            <td>
                <br>
                In <strong>{{ $exception->getFile() }}</strong> on line <strong>{{  $exception->getLine() }}</strong>
            </td>
        </tr>
    </table>
    <hr style="color: #f6f6f6;">
    <table  style="font-size: 12px;" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <strong>Stack Trace:</strong>
            </td>
        </tr>
        <tr>
            <td align="left" style="text-align: left;">
                {!! nl2br($exception->getTraceAsString()) !!}
            </td>
        </tr>
    </table>


@endwhile
