import { useState } from "react";
import CreateUsers from "./Components/Users/CreateUsers";
import ReadUsers from "./Components/Users/ReadUsers";

function Users() {
  const [reload, setReload] = useState(false);

  return (
    <>
      <CreateUsers setReload={setReload} />
      <ReadUsers reload={reload} setReload={setReload} />
    </>
  );
}

export default Users;
