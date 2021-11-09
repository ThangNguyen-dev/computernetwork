<main id="main">
    <h1>Create News Post</h1>
    <div id="iframe">
        <div id="editor">
            <form action="./../post/store" method="post" enctype="multipart/form-data">
                <div class="input-file">
                    <label for="thumbnail">Image thumbnail for post: </label>
                    <input type="file" name="img" id="thumbnail">
                </div>
                <div class="d-flex justify-content-space">
                    <div class="input-title mr-5">
                        <input type="text" name="title" id="" placeholder="Title">
                    </div>
                    <div class="ml-5 input-type">
                        <select name="type">
                            <option value="network">Network Administrator</option>
                            <option value="ccna">CCNA Tutorial</option>
                            <option value="linux">Linux Tutorial</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="area">Input content</label>
                    <textarea id="area" style=" width: 100%; height: 22rem;" placeholder="Content"
                              name="content"></textarea>
                </div>
                <div style="height: 2rem">
                    <input type="submit" class="btn btn-primary" name="submit" id=""
                           style="width: 100%; background-color: #1b63a2; color: wheat; height: 100%;" value="Submit">
                </div>
            </form>
        </div>
    </div>
</main>
