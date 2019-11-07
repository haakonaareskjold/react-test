import React from "react";

//custom imports
import Counter from "./counter";
import ToggleVisibility from "./ToggleVisibility";

class App extends React.Component {
  render() {
    return (
      <div className="App">
        <Counter />
        <br />
        <hr />
        <br />
        <ToggleVisibility />
      </div>
    );
  }
}

export default App;
