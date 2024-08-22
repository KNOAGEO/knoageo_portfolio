
// サンプルデータ（実際にはAPIやデータベースから取得する）
        const data = [
            { title: "JavaScriptの基礎", description: "JavaScriptの基本的な概念について学びます。" },
            { title: "HTMLとCSSの入門", description: "Webページの作成に必要なHTMLとCSSの基礎を学びます。" },
            { title: "React.jsチュートリアル", description: "React.jsを使ったモダンなWebアプリの開発方法を紹介します。" },
            { title: "Pythonプログラミング", description: "Pythonを使ったプログラムの書き方と応用技術を学びます。" }
        ];

        // 検索関数
        function performSearch() {
            const query = document.getElementById("search-query").value.toLowerCase();
            const resultsContainer = document.getElementById("search-results");

            // 結果をクリア
            resultsContainer.innerHTML = '';

            // 検索クエリが空でないか確認
            if (query) {
                const results = data.filter(item => item.title.toLowerCase().includes(query) || item.description.toLowerCase().includes(query));

                // 検索結果を表示
                if (results.length > 0) {
                    results.forEach(item => {
                        const resultElement = document.createElement("div");
                        resultElement.classList.add("result-item");
                        resultElement.innerHTML = `<h3>${item.title}</h3><p>${item.description}</p>`;
                        resultsContainer.appendChild(resultElement);
                    });
                } else {
                    resultsContainer.innerHTML = '<p>検索結果が見つかりませんでした。</p>';
                }
            }
        }

        // カルーセル
        $('.slider').slick({
            autoplay:true, // 自動再生を設定
            autoplaySpeed:5000, // スライド切り替えの時間を設定
            dots:true // インジケーターを表示
          });