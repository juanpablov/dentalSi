
{include file='modalDinamico.tpl'}
    <style>
        .ajaxLoading {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(255, 255, 255, .8) url('../../dentalSi/img/ajax-loader.gif') 50% 50% no-repeat;
        }

        body.loading {
            overflow: hidden;
        }

        body.loading .ajaxLoading {
            display: block;
        }
    </style>

    <div class="ajaxLoading"></div>

    <script>

        $(document).ready(function () {

        });
    </script>