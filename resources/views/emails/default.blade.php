<html>
    <head></head>
    <body>
        <div style="display: table; width: 100%; text-align: center; height: 40px; background: #68A4C4; color: #fff; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold;">
            <div style="display: table-cell; vertical-align: middle;">Статистика по баннеру {{ $banner_title }} c {{ $request->date_first }} по {{ $request->date_second }}</div>
        </div>
        <div style="width: 50%; padding: 40px 25%; text-align: center; font-family: 'Open Sans', Arial, sans-serif; font-size: 12px;">
            <p>Количество просмотров = {{ $count_viewings }}</p>
            <p>Количество переходов = {{ $count_links }}</p>
        </div>
        <div style="display: table; width: 100%; text-align: center; height: 40px; background: #68A4C4; color: #fff; font-family: 'Open Sans', Arial, sans-serif; font-size: 14px; font-weight: bold;">
            <div style="display: table-cell; vertical-align: middle;">Тестовое Исаков Максим</div>
        </div>
    </body>
</html>