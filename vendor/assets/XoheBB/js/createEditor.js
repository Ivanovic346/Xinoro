// MIT License

// Copyright (c) 2021 Egor Udovin

// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:

// The above copyright notice and this permission notice shall be included in all
// copies or substantial portions of the Software.

// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
// SOFTWARE.


function createEditor(bgColor,fontColor)
{
	document.getElementById("XoheBB").innerHTML = "<div id='XoheBB-Tools'><div class='XoheBB-tools-box'><item-box><a class='button-text' onclick='setFormat("+'"bold"'+");'><img class='aling-img' src='vendor/assets/XoheBB/image/B.svg'></a><a  class='button-text' onclick='setFormat("+'"italic"'+");'><img class='aling-img' src='vendor/assets/XoheBB/image/I.svg'></a>"+
	"<a  class='button-text' onclick='setFormat("+'"underline"'+");'><img class='aling-img' src='vendor/assets/XoheBB/image/U.svg'></a><a  class='button-text' onclick='setFormat("+'"strikethrough"'+");'><img class='aling-img' src='vendor/assets/XoheBB/image/S.svg'></a></item-box>"+
	"<item-box><a  class='button-text' onclick='setFormat("+'"justifyLeft"'+");'><img class='aling-img' src='vendor/assets/XoheBB/image/align-left.svg'></a>"+
	"<a  class='button-text' onclick='setFormat("+'"justifyCenter"'+");'><img class='aling-img' src='vendor/assets/XoheBB/image/align-center.svg'></a>"+
	"<a  class='button-text' onclick='setFormat("+'"justifyRight"'+");'><img class='aling-img' src='vendor/assets/XoheBB/image/align-right.svg'></a></item-box>"+
	"<item-box>"+
	"<a  class='button-text' onclick='insertUrl();'><img style='width: 35px; height:15px;' src='vendor/assets/XoheBB/image/URL.svg'></a><a  class='button-text' onclick='insertFormatBlock("+'"blockquote"'+");'><img style='width: 20px;' src='vendor/assets/XoheBB/image/code.svg'></a></item-box></div>"+
	"</div><div id='XoheBB-Editor'contenteditable='true'>Этот текст может быть отредактирован пользователем</div>";
	document.getElementById("XoheBB").style.color = fontColor;
	document.getElementById("XoheBB").style.backgroundColor = bgColor;
}

function setRadius(radius)
{
	document.getElementById("XoheBB").style.borderRadius = radius+"px";
}

function setBorder(style)
{
	document.getElementById("XoheBB").style.border = style;
}

function setShadow()
{
	document.getElementById("XoheBB").style.boxShadow = "0px 4px 17px rgba(0, 0, 0, 0.25)";
}


// Editor fuctions
function setFormat(key)
{
	document.execCommand(key, false, null);
}

function insertImg()
{
	var url = prompt('Введите адрес изображения', '');
	document.execCommand('insertImage', false, url);
}

function insertUrl()
{
	var url = prompt('Введите URL', '');
	document.execCommand('CreateLink', false, url);
}

function insertFormatBlock(block)
{
	document.execCommand('formatBlock', false, block);
}

function setFont(select)
{
	document.execCommand('styleWithCSS', false, true);
	document.execCommand('fontName', false, select.value);
	document.execCommand('styleWithCSS', false, false);
}
