<main id="main">
    <h1>Edit News Post</h1>
    <div id="iframe">
        <div id="editor">
            <form action="./../../post/update/<?=$data['post'][0]['id']?>" method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-space">
                    <div class="input-title mr-5">
                        <input type="text" name="title" id="" placeholder="Title" value="<?= $data['post'][0]['title'] ?>">
                    </div>
                    <div class="ml-5 input-type">
                        <select name="type">
                            <option value="network" <?= $data['post'][0]['type'] == 'network' ? "selected" : "" ?>>Network Administrator</option>
                            <option value="ccna" <?= $data['post'][0]['type'] == 'ccna' ? "selected" : "" ?>>CCNA Tutorial</option>
                            <option value="linux" <?= $data['post'][0]['type'] == 'linux' ? "selected" : "" ?>>Linux Tutorial</option>
                        </select>
                    </div>
                </div>
                <div style="width: 100%;" class="mt-3 input-title mr-5">
                    <input style="width: 100%;" type="text" name="minitext" id="" placeholder="Mini text" value="<?= $data['post'][0]['mini_text'] ?>">
                </div>
                <div>
                    <label for="area">Input content</label>
                    <textarea id="area" class="input-title" style=" width: 100%; height: 22rem;" placeholder="Content" name="content" value="<?= $data['post'][0]['content'] ?>"></textarea>
                </div>
                <div style="height: 2rem">
                    <input type="submit" class="btn btn-primary" name="submit" id="" style="width: 100%; background-color: #1b63a2; color: wheat; height: 100%;" value="Submit">
                </div>
            </form>
        </div>
    </div>
</main>