<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проект эффективного транспортного средства</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2, h3 {
            color: #333;
        }
        .tabs {
            display: flex;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        .tab {
            padding: 10px 20px;
            cursor: pointer;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            border-bottom: none;
            border-radius: 5px 5px 0 0;
            margin-right: 5px;
        }
        .tab.active {
            background-color: white;
            border-bottom: 1px solid white;
        }
        .tab-content {
            display: none;
            padding: 20px;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .tab-content.active {
            display: block;
        }
        .view {
            margin: 20px 0;
            display: flex;
            justify-content: center;
        }
        .view img {
            max-width: 100%;
            border: 1px solid #ddd;
        }
        .specs {
            display: flex;
            flex-wrap: wrap;
            margin: 20px 0;
        }
        .spec-item {
            width: 45%;
            margin: 10px;
            padding: 15px;
            background-color: #f8f8f8;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .spec-item h3 {
            margin-top: 0;
            color: #444;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
        }
        .track {
            height: 120px;
            background-color: #eee;
            position: relative;
            margin: 30px 0;
            border-radius: 5px;
            overflow: hidden;
        }
        .track-surface {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 40%;
            background-color: #ddd;
            transform: skewY(1.63deg);
            transform-origin: left;
        }
        .car {
            position: absolute;
            width: 60px;
            height: 30px;
            bottom: 40px;
            left: 20px;
            background-color: #e74c3c;
            border-radius: 5px;
            transition: left 5s ease-in;
        }
        .car:after {
            content: '';
            position: absolute;
            width: 12px;
            height: 12px;
            background-color: #333;
            border-radius: 50%;
            bottom: -6px;
            left: 10px;
        }
        .car:before {
            content: '';
            position: absolute;
            width: 12px;
            height: 12px;
            background-color: #333;
            border-radius: 50%;
            bottom: -6px;
            right: 10px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #2980b9;
        }
        .model-schema {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .model-view {
            width: 48%;
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .model-view h3 {
            margin-top: 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
        }
        .model-diagram {
            width: 100%;
            height: 200px;
            background-color: #fff;
            border: 1px solid #ddd;
            margin-top: 10px;
            position: relative;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Эффективное транспортное средство для наклонного трека</h1>

    <div class="tabs">
        <div class="tab active" onclick="openTab(event, 'design')">Конструкция</div>
        <div class="tab" onclick="openTab(event, 'specs')">Спецификации</div>
        <div class="tab" onclick="openTab(event, 'print')">3D Печать</div>
        <div class="tab" onclick="openTab(event, 'simulation')">Симуляция</div>
    </div>

    <div id="design" class="tab-content active">
        <h2>Схема конструкции</h2>
        <div class="model-schema">
            <div class="model-view">
                <h3>Вид сбоку</h3>
                <div class="model-diagram" id="side-view">
                    <!-- Side view diagram rendered by JS -->
                </div>
            </div>
            <div class="model-view">
                <h3>Вид сверху</h3>
                <div class="model-diagram" id="top-view">
                    <!-- Top view diagram rendered by JS -->
                </div>
            </div>
        </div>
        <h3>Ключевые особенности конструкции:</h3>
        <ul>
            <li><strong>Оптимизированное распределение веса</strong> - батареи расположены над ведущими колесами</li>
            <li><strong>Низкий центр тяжести</strong> - улучшает устойчивость на наклонной поверхности</li>
            <li><strong>Большие задние ведущие колеса</strong> - диаметр 5 см с текстурированной поверхностью для лучшего сцепления</li>
            <li><strong>Эффективная система редукции</strong> - передаточное отношение 4:1 для оптимального соотношения скорости и крутящего момента</li>
            <li><strong>Аэродинамическая форма корпуса</strong> - снижает сопротивление воздуха</li>
        </ul>
    </div>

    <div id="specs" class="tab-content">
        <h2>Технические характеристики</h2>
        <div class="specs">
            <div class="spec-item">
                <h3>Энергосистема</h3>
                <p>• Двигатель: Маленький DC мотор (3-6В)<br>
                    • Батареи: 4 × AA батарейки (всего 6В)<br>
                    • Конфигурация: Последовательное соединение<br>
                    • Расч. выходная мощность: 0,18-0,25 Ватт</p>
            </div>
            <div class="spec-item">
                <h3>Трансмиссия</h3>
                <p>• Передаточное отношение: 4:1<br>
                    • Привод: Задний привод<br>
                    • Размер колес: 5 см в диаметре<br>
                    • Макс. обороты: ~760 об/мин</p>
            </div>
            <div class="spec-item">
                <h3>Физические свойства</h3>
                <p>• Вес: 0,45-0,55 кг<br>
                    • Длина: 15 см<br>
                    • Ширина: 10 см<br>
                    • Высота: 5 см</p>
            </div>
            <div class="spec-item">
                <h3>Производительность</h3>
                <p>• Расч. время прохождения трека: 5-7 секунд<br>
                    • Макс. скорость: ~2 м/с<br>
                    • Крутящий момент: ~0,0035 Н·м<br>
                    • Сцепление: Улучшенные резиновые колеса</p>
            </div>
        </div>
        <h3>Расчет эффективности:</h3>
        <p>Согласно формуле P = mgh/t:</p>
        <ul>
            <li>Масса (m): 0,5 кг</li>
            <li>Гравитация (g): 9,8 м/с²</li>
            <li>Высота (h): 0,285 м</li>